@props(['type'])

<div {{ $attributes->merge(['class' => 'alert alert-dismissible fade show alert-'.$type]) }} role="alert">
    {{$slot}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
