<div
    class="gaze-banner @if($show) gaze-banner--has-content @endif"
    x-data="{}"
    wire:poll.{{ $pollTimer }}s
>
    @if($show)
        <div>
            <div class="flex flex-row gap-2 rounded-xl p-6 border border-primary-500 text-primary-500 bg-gray-100 dark:bg-gray-900">
                <div class="flex flex-col justify-center">
                    <x-filament::icon
                        alias="panels::filament-gaze.banner.icon"
                        icon="heroicon-m-eye"
                        class="h-5 w-5 my-auto"
                    />
                </div>

                <p>
                    {{ $text }}
                </p>
            </div>
        </div>
    @endif
</div>