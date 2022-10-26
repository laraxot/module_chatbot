<?php

declare(strict_types=1);

namespace Modules\ChatBot\Providers;

// ---- bases ----
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class ChatBotServiceProvider.
 */
class ChatBotServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'chatbot';

    /*
    public function bootCallback():void {
    }

    public function registerCallback():void {
    }
    */
}
