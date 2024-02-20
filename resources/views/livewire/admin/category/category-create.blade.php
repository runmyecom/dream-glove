<div>
    <x-outline-button @click="$wire.set('modalCategoryCreate', true)" class="flex items-center gap-1">
        <x-icons.add class="w-4 h-4 text-gray-700" />
        Create Category
    </x-outline-button>

    <x-dialog-form wire:model.live="modalCategoryCreate" submit="save">
        <x-slot name="title">
            New Category
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Category name -->
                <div class="col-span-12">
                    <x-label for="form.name" value="Name" />
                    <x-input wire:model="form.name" id="form.name" type="text" class="mt-1 block w-full" required autocomplete="form.name" />
                    <x-input-error for="form.name" class="mt-1" />
                </div>

                <!-- Thumbnail -->
                <div class="col-span-12">
                    <x-label for="form.thumbnail" value="Thumbnail" />
                    <x-input wire:model="form.thumbnail" id="form.thumbnail" type="text" class="mt-1 block w-full" />
                    <x-input-error for="form.thumbnail" class="mt-1" />
                </div>

                <!-- Select Category -->
                <div class="col-span-12">
                    <x-label for="form.parent_id" value="Select Parent" />
                    <div class="search-box relative w-full">
                        <x-input type='text' wire:model="search" wire:keyup="searchParent" class="w-full" />
                        @if($resultDiv)
                            <ul class="absolute top-12 left-4 right-4 bg-white rounded-lg overflow-hidden shadow-lg border divide-y">
                                @if(!empty($results))
                                    @foreach($results as $result)
                                        <li class="cursor-pointer p-2.5 hover:bg-zinc-50 bg-white" wire:click="fetchDetailById({{ $result->id }})">{{ $result->name}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        @endif
                    </div>
                    <x-input-error for="form.parent_id" class="mt-1" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCategoryCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Add Category
            </x-button>
        </x-slot>
    </x-dialog-form>
</div>
