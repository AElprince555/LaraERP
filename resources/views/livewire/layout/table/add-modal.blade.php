<div>
    <x-modal
        name="add-modal"
        :show="$errors->isNotEmpty()"
        :show="false"
        focusable
    >
        <div class="p-3 pt-5">
            <h2 class="font-extrabold">Hello</h2>
        </div>

    </x-modal>
</div>
