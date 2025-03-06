@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>
  {{ $slot }}
  <a {{ $attributes }}>View Details</a>
</div>