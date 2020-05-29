@extends('players/layouts/app')

@section('title')
TennisApp | Spieler
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Spieler</h1>
</div>

<div class="container pb-5 mb-5">

    <div class="card shadow my-4 playerblurredimage">

        <table class="table table-sm table-borderless matchdaytable">
            <tbody>
                <tr>
                    <td class="col-5 fdg pt-3">Rang</td>
                    <td class="col-7 pt-3"><strong>{{ $player->ranking }}</strong></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">LK</td>
                    <td class="col-7"><strong>{{ $player->performance_class }}</strong></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">ID-Nummer</td>
                    <td class="col-7"><strong>{{ $player->dtb_id }}</strong></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">Vorname</td>
                    <td class="col-7"><strong>{{ $player->firstname }}</strong></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">Name</td>
                    <td class="col-7"><strong>{{ $player->name }}</strong></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">Spitzname</td>
                    <td class="col-7"><strong>{{ $player->nickname }}</strong></td>
                </tr>

                @if($player->birthday != 0000-00-00)
                <tr>
                    <td class="col-5 fdg">Geburtstag</td>
                    <td class="col-7"><strong>{{ \Carbon\Carbon::parse($player->birthday)->format('j.n.Y')}}</strong></td>
                </tr>
                @endif

                <tr>
                    <td class="col-5 fdg">Tel privat</td>
                    <td class="col-7"><a href="tel:{{ $player->tel_private }}"><strong>{{ $player->tel_private }}</strong></a></td>
                </tr>

                <tr>
                    <td class="col-5 fdg">Tel mobil</td>
                    <td class="col-7"><a href="tel:{{ $player->tel_mobile }}"><strong>{{ $player->tel_mobile }}</strong></a></td> <!-- tel:+4915129114492 -->
                </tr>

                <tr>
                    <td class="col-5 fdg">E-Mail</td>
                    <td class="col-7"><a href="mailto:{{ $player->email }}"><strong>{{ $player->email }}</strong></a></td>
                </tr>

            </tbody>
        </table>

    </div>

    <div>
        <a href="{{ route('players.edit', ['player' => $player]) }}" class="bigbutton btn btn-primary btn-block" type="button">Bearbeiten</a>
    </div>

</div>

<!-- container closing tag -->
</div>

@endsection