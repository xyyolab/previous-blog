<link rel="stylesheet" href="{{ asset('/css/-debug.css') }}">
<div class="big-pic">
    <section class="hero is-medium big-pic">
        <div class=" hero-body">
            <div class="container">
                <h1 class="title has-text-white is-1 is-size-1-desktop is-size-4-mobile">
                    {{ $post['post']['title'] }}
                </h1>
            </div>
        </div>
    </section>
</div>

<style>
    .big-pic {
        background-image: url("{{ $post['post']['featured_image'] }}");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        opacity: 0.7;
        filter: blur(0.8px);
    }
</style>