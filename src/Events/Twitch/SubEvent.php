<?php

namespace GhostZero\Tmi\Events\Twitch;

use GhostZero\Tmi\Channel;
use GhostZero\Tmi\Events\Event;
use GhostZero\Tmi\Plan;
use GhostZero\Tmi\Tags;
use GhostZero\Tmi\Traits\HasTagSignature;

class SubEvent extends Event
{
    use HasTagSignature;

    public Channel $channel;
    public string $user;
    public Plan $plan;
    public string $message;
    public Tags $tags;

    public function __construct(Channel $channel, string $user, Plan $plan, string $message, Tags $tags)
    {
        $this->channel = $channel;
        $this->user = $user;
        $this->plan = $plan;
        $this->message = $message;
        $this->tags = $tags;
    }
}
