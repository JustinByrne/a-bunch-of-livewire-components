<div
    x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }

            this.$refs.button.focus()

            this.open = true
        },
        close(focusAfter) {
            if (! this.open) return

            this.open = false

            focusAfter && focusAfter.focus()
        }
    }"
    x-on:keydown.escape.prevent.stop="close($refs.button)"
    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
    x-id="['dropdown-button']"
    class="relative"
>

    <label for="{{ strtolower(str_replace(' ', '_', $label)) }}_autocomplete"> {{ $label }} </label>
    <input
        type="text"
        id="{{ strtolower(str_replace(' ', '_', $label)) }}_autocomplete"
        wire:model="search"
        class="{{ config('a-bunch-of-livewire-components.autocomplete.classes.input') }}"
        x-ref="button"
        x-on:click="toggle()"
        :aria-expanded="open"
        :aria-controls="$id('dropdown-button')">

    <input type="hidden" name="{{ $name }}" wire:model="selected_value">
    
    <div
        x-ref="panel"
        x-show="open"
        x-transition.origin.top.left
        x-on:click.outside="close($refs.button)"
        :id="$id('dropdown-button')"
        style="display: none;"
        class="{{ config('a-bunch-of-livewire-components.autocomplete.classes.panel') }}"
    >
        @foreach ($items as $item)
            <div
                class="{{ config('a-bunch-of-livewire-components.autocomplete.classes.item') }}"
                wire:click="selectItem('{{ $item->$display }}', '{{ $item->$value }}')"
                x-on:click="close($refs.button)"
            >
                {{ $item->$display }}
            </div>
        @endforeach
    </div>
</div>

