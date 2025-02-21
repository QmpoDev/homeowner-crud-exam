@extends('main')

@section('content')
<div class="flex items-center justify-center h-screen">  <div class="card">
        
        <div class="header">
            <div class="image">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="content">
                <span class="title">Homeowner added</span>
            </div>
            <div class="actions">
                <button class="add_another_btn" onclick="window.location.href='/add'" type="button">Add Another</button>
                <button class="home_btn" onclick="window.location.href='/'" type="button">Back to Home</button>
            </div>
        </div>
    </div>
</div>
@endsection


<style>
   
    .card {
    
        overflow: hidden;
        position: relative;
        text-align: left;
        border-radius: 0.5rem;
        max-width: 290px;
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
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5rem;
    }

    .message {
        margin-top: 0.5rem;
        color: #595b5f;
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .actions {
        margin: 0.75rem 1rem;
    }

    .add_another_btn {
    display: inline-flex;
    padding: 0.5rem 1rem;
    background-color: #1aa06d;
    color: #ffffff;
    font-size: 1rem;
    line-height: 1.5rem;
    font-weight: 500;
    justify-content: center;
    width: 100%;
    border-radius: 0.375rem;
    border: none;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    transition: background-color 0.2s ease; /* Add transition for smooth hover effect */
}

.add_another_btn:hover {
    background-color: #15885f; /* Darker shade of green on hover */
    cursor: pointer; /* Change cursor to pointer on hover */
}

.home_btn {
    display: inline-flex;
    margin-top: 0.75rem;
    padding: 0.5rem 1rem;
    color: #242525;
    font-size: 1rem;
    line-height: 1.5rem;
    font-weight: 500;
    justify-content: center;
    width: 100%;
    border-radius: 0.375rem;
    border: 1px solid #D1D5DB;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease; /* Add transition */
}

.home_btn:hover {
    background-color: #f0f0f0; /* Light gray on hover */
    color: #000; /* Darker text on hover */
    border-color: #aaa; /* Slightly darker border */
    cursor: pointer; /* Change cursor to pointer on hover */
}
   
    
</style>
