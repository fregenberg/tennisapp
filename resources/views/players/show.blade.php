@extends('players/layouts/app')

@section('title')
TennisApp | Spieler
@endsection

@section('content')

<div class="container-fluid static-top p-3 css_heading">
    <h1 class="pt-1 css_headline">Spieler</h1>
</div>

<div class="container pb-5 mb-5">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="card shadow my-4 css_cards css_playercardsbackground">
            <div class="card-body">

                <table class="table table-sm table-borderless css_playertable">
                    <tbody>
                        <tr>
                            <td class="col-5 css_playertable-rowlabel pt-3">Rang</td>
                            <td class="col-7 pt-3"><strong>{{ $player->ranking }}</strong></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">LK</td>
                            <td class="col-7"><strong>{{ $player->performance_class }}</strong></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">ID-Nummer</td>
                            <td class="col-7"><strong>{{ $player->dtb_id }}</strong></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Vorname</td>
                            <td class="col-7"><strong>{{ $player->firstname }}</strong></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Name</td>
                            <td class="col-7"><strong>{{ $player->name }}</strong></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Spitzname</td>
                            <td class="col-7"><strong>{{ $player->nickname }}</strong></td>
                        </tr>

                        @if($player->birthday != 0000-00-00)
                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Geburtstag</td>
                            <td class="col-7"><strong>{{ \Carbon\Carbon::parse($player->birthday)->format('j.n.Y')}}</strong></td>
                        </tr>
                        @endif

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Tel privat</td>
                            <td class="col-7"><a href="tel:{{ $player->tel_private }}"><strong>{{ $player->tel_private }}</strong></a></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">Tel mobil</td>
                            <td class="col-7"><a href="tel:{{ $player->tel_mobile }}"><strong>{{ $player->tel_mobile }}</strong></a></td>
                        </tr>

                        <tr>
                            <td class="col-5 css_playertable-rowlabel">E-Mail</td>
                            <td class="col-7"><a href="mailto:{{ $player->email }}"><strong>{{ $player->email }}</strong></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            @if(Gate::check('update', $player) || Gate::check('isadmin') || Gate::check('iscaptain'))
            <div class="card-footer row css_footer-buttons-space">
                <a href="{{ route('players.edit', ['player' => $player]) }}" class="col-5 btn btn-sm css_footer-buttons" type="button">Bearbeiten</a>

                <button class="col-5 btn btn-sm css_footer-buttons text-danger" type="submit">{{ __('Logout') }}</button>
            </div>
            @endif

        </div>
    </form>
    <!-- container closing tag -->
</div>

@endsection