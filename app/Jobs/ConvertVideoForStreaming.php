<?php

namespace App\Jobs;

use FFMpeg\Coordinate\Dimension;
use app\models\video;
use Carbon\Carbon;
use FFMpeg\Filters\Video\VideoFilters;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
class ConvertVideoForStreaming implements ShouldQueue
{
 use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;

    /**
     * Create a new job instance.
     *
     * @param Video $video
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $lowBitrateFormat = (new X264('aac'))->setKiloBitrate(500);

        $converted_name = $this->getCleanFileName($this->video->path);

        FFMpeg::fromDisk($this->video->disk)
            ->open($this->video->path)
            ->addFilter(function (VideoFilters $filters) {
                $filters->resize(new Dimension(640, 480));
            })
            ->export()
            ->toDisk('public')
            ->inFormat($lowBitrateFormat)
            ->save($converted_name);


            $this->video->update([
            'converted_for_streaming_at' => Carbon::now(),
            'processed' => true,
            'stream_path' => $converted_name
        ]);
    }

    private function getCleanFileName($filename){
        return preg_replace('/\.[^.\s]{3,4}$/', '', $filename) . '.mp4';
    }
}
