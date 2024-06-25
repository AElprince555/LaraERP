@props(['id'=>null  , 'slot'=>'Delete'])
<span wire:click="delete" class="w-full" wire:confirm="Are you sure ?">
    {{$slot}}
</span>
