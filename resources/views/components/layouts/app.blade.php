<!DOCTYPE html>
<html lang="en">

<x-layouts.head :title="$title ?? null" />

<body>

    <div class="layout">

        <x-layouts.sidebar />

        <main class="layout__main main">
            {{ $slot }}
        </main>

    </div>

</body>
</html>
