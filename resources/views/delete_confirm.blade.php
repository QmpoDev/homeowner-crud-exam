@extends('main')

@section('content')
<div class="flex items-center justify-center h-screen">
<div class="brutalist-card">
    <div class="brutalist-card__header">
        <div class="brutalist-card__icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
            </svg>
        </div>
        <div class="brutalist-card__alert">Are you sure?</div>
    </div>
    <div class="brutalist-card__message text-center">
        <div class ="text-2xl"> YOU ARE ABOUT TO DELETE A HOMEOWNER</div>
       
    </div>
    <div class="brutalist-card__message">
        ID: {{ $homeowner->id }}<br> 
        Name: {{ $homeowner->first_name }} {{ $homeowner->middle_name }}  {{ $homeowner->last_name }}<br>
        Email: {{ $homeowner->email }}<br>
        Phone: {{ $homeowner->phone }}<br>
        Address: {{ $homeowner->address }}<br>

    </div>
    <div class="brutalist-card__actions">
        <form action="/delete/{{ $homeowner->id }}" method="POST">
            @csrf
            <button type="submit" class="brutalist-card__button brutalist-card__button--mark">Delete</button>
        </form>
        <a class="brutalist-card__button brutalist-card__button--read" href="/">Cancel</a>
    </div>
</div>
</div>
@endsection

<style>

    /* From Uiverse.io by 0xnihilism */ 
.brutalist-card {
  width: 40%;
  height: 70%;
  border: 4px solid #000;
  background-color: #fff;
  padding: 50px;

  font-family: "Arial", sans-serif;
}

.brutalist-card__header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1rem;
  border-bottom: 2px solid #000;
  padding-bottom: 1rem;
}

.brutalist-card__icon {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #000;
  padding: 0.5rem;
}

.brutalist-card__icon svg {
  height: 1.5rem;
  width: 1.5rem;
  fill: #fff;
}

.brutalist-card__alert {
  font-weight: 900;
  color: #000;
  font-size: 1.5rem;
  text-transform: uppercase;
}

.brutalist-card__message {
  margin-top: 1rem;
  color: #E90909FF;
  font-size: 0.9rem;
  line-height: 1.4;
  border-bottom: 2px solid #000;
  padding-bottom: 1rem;
  font-weight: 600;
}

.brutalist-card__actions {
  margin-top: 6rem;
}

.brutalist-card__button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  text-align: center;
  font-size: 1rem;
  font-weight: 700;
  text-transform: uppercase;
  border: 3px solid #000;
  background-color: #fff;
  color: #000;
  position: relative;
  transition: all 0.2s ease;

  overflow: hidden;
  text-decoration: none;
  margin-bottom: 1rem;
}

.brutalist-card__button--read {
  background-color: #000;
  color: #fff;
}

.brutalist-card__button::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(255, 255, 255, 0.3),
    transparent
  );
  transition: all 0.6s;
}

.brutalist-card__button:hover::before {
  left: 100%;
}

.brutalist-card__button:hover {
  transform: translate(-2px, -2px);
  box-shadow: 7px 7px 0 #000;
}

.brutalist-card__button--mark:hover {
    background-color: #ff0000;
  border-color: #ff0000;
  color: #fff;
  box-shadow: 7px 7px 0 #800000;
  
}

.brutalist-card__button--read:hover {
    background-color: #296fbb;
  border-color: #296fbb;
  color: #fff;
  box-shadow: 7px 7px 0 #004280;
}

.brutalist-card__button:active {
  transform: translate(5px, 5px);
  box-shadow: none;
}

</style>