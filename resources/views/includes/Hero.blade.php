<style>
    /* Container styles */
    .fullscreen-container {
        width: 100%;
        height: 100vh;
        position: relative;
    }
    .bg-image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    .mask {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        padding: 0 5%;
    }
    .content {
        max-width: 600px;
        color: white;
    }

    .title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .description {
        font-size: 1.1rem;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    /* Button styles */
    .buttons {
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-outline {
        background: transparent;
        border: 2px solid white;
        color: white;
    }

    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .btn-solid {
        background: #FFB800;
        border: none;
        color: #000;
    }

    .btn-solid:hover {
        background: #FFA500;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .title {
            font-size: 2.5rem;
        }

        .buttons {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
</style>

<div class="fullscreen-container">
    <div class="bg-image" style="background-image: url('{{ asset('assets/images/hero.jpg') }}')">
        <div class="mask">
            <div class="content">
                <h1 class="title">{{ __('messages.hero_title') }}</h1>
                <p class="description" style="text-align: justify">
                    {{ __('messages.hero_description') }}
                </p>
                <div class="buttons">
                    <button class="btn btn-outline">{{ __('messages.get_assessment') }}</button>
                    <button class="btn btn-solid">{{ __('messages.work_with_us') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
