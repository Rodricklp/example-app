@php
    switch ($type) {
      case 'info':
        $class = "text-blue-800 bg-blue-50";
        break;
      
        case 'danger':
        $class = "text-red-800 bg-red-50";
        break;

        case 'success':
        $class = "text-green-800 bg-green-50";
        break;

        case 'warning':
        $class = "text-yellow-800 bg-yellow-50";
        break;

        case 'dark':
        $class = "text-gray-800 bg-gray-50";
        break;

      default:
        $class = "text-blue-800 bg-blue-50";
        break;
    }
@endphp

<div class="p-4 mb-4 text-sm rounded-lg {{ $class }}" role="alert">
  <span class="font-medium">{{ $title }}</span> {{ $slot }}.
</div>