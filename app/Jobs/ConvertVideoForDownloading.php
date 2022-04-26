<?php

namespace App\Jobs;

use App\Models\Video as ModelsVideo;
use App\Video;
use Carbon\Carbon;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use FFMpeg;
class ConvertVideoForDownloading implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;

    public function __construct(ModelsVideo $video)
    {
        $this->video = $video;
    }

    public function handle()
    {
        $lowBitrateFormat = (new X264)->setKiloBitrate(500);
        FFMpeg::fromDisk($this->video->disk)
            ->open($this->video->path)
            ->addFilter(function ($filters) {
                $filters->resize(new Dimension(960, 540));
            })
            ->export()
            ->toDisk('downloadable_videos')
            ->inFormat($lowBitrateFormat)
            ->save($this->video->id . '.mp4');
        $this->video->update([
            'converted_for_downloading_at' => Carbon::now(),
        ]);
    }
}