@extends('main')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="card">
        <div class="header">
            <div class="image">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="content">
                <span class="title">Homeowner edited</span>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            window.location.href = '/'; 
        }, 1500); 
    });
</script>
@endsection

<style>
   
    .card {
        padding: 100px;
        overflow: hidden;
        position: relative;
        text-align: left;
        border-radius: 0.5rem;
        max-width: 500px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        background-color: #fff;
    }
   

    .header {
        padding: 1.25rem 1rem 1rem 1rem;
    }

    .image {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        background-color: #e2feee;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 3rem;
        height: 3rem;
        border-radius: 9999px;
        animation: animate .6s linear alternate-reverse infinite;
        transition: .6s ease;
    }

    .image svg {
        color: #0afa2a;
        width: 2rem;
        height: 2rem;
    }

    .content {
        margin-top: 0.75rem;
        text-align: center;
    }

    .title {
        color: #066e29;
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.5rem;
    }

    .message {
        margin-top: 0.5rem;
        color: #595b5f;
        font-size: 0.875rem;
        line-height: 1.25rem;
    }


   
    
</style>
