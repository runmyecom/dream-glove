<div>
    <x-dialog-form wire:model.live="modalProductDelete" submit="del">
        <x-slot name="title">
            Delete Product
        </x-slot>

        <x-slot name="content">
            <p>Do you really want to delete Product : {{ $name }} ?</p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalProductDelete', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Delete Product
            </x-button>
        </x-slot>
    </x-dialog-form>
</div>
