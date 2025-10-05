<div class="fab bottom-8 right-8">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">
        <x-icon name="o-chat-bubble-left-right" class="h-6" />
    </div>

    <div class="fab-close">
        {{-- <p class="text-error bg-base-300 p-2 rounded-md">Tutup</p> --}}
        <span class="btn btn-circle btn-lg btn-error">
            <x-icon name="o-x-mark" class="h-6" />
        </span>
    </div>

    <!-- Email Button -->
    <div>
        <p class="text-info bg-base-300 p-2 rounded-md">Email</p>
        <button wire:click="openEmail"
                class="btn btn-lg btn-circle btn-info"
                aria-label="Send Email">
            <x-icon name="o-envelope" class="h-6" />
        </button>
    </div>

    <!-- WhatsApp Button -->
    <div>
        <p class="text-success bg-base-300 p-2 rounded-md">Whatsapp</p>
        <button wire:click="openWhatsapp"
                class="btn btn-lg btn-circle btn-success"
                aria-label="Chat on WhatsApp">
            <x-icon name="fab.whatsapp" class="h-6" />
        </button>
    </div>
</div>

{{-- JavaScript to handle open-url event --}}
@script
<script>
    $wire.on('open-url', (event) => {
        window.location.href = event.url;
    });
</script>
@endscript
