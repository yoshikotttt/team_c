<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mx-auto bg-secondary']) }}>
    {{ $slot }}
</button>
