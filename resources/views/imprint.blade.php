@extends('layouts.app')

@section('title')
TennisApp | Impressum
@endsection

@section('content')

@section('content')

<div class="overlay">

    <div class="container pt-5 mt-5">
        <h3 class="pt-3 css_auth-headline">Impressum</h3>

        <div class="card bg-transparent border-0 pt-1 mb-5 css_cards">
            <div class="card-body">

                <h4>Angaben gem&auml;&szlig; &sect; 5 TMG</h4>
                <p>Tim Freienberg<br />
                    Alsterdorfer Damm 17<br />
                    22297 Hamburg</p>

                <h4>Kontakt</h4>
                <p>Telefon: 040 87976551<br />
                    Telefax: 03212 1372506<br />
                    E-Mail: <a href="mailto:Code@TimFreienberg.de">Code@TimFreienberg.de</a></p>

                <h5>Haftung f&uuml;r Inhalte</h5>
                <p>Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit hinweisen.</p>
                <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
                <h5>Haftung f&uuml;r Links</h5>
                <p>Unser Angebot enth&auml;lt Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb k&ouml;nnen wir f&uuml;r diese fremden Inhalte auch keine Gew&auml;hr &uuml;bernehmen. F&uuml;r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m&ouml;gliche Rechtsverst&ouml;&szlig;e &uuml;berpr&uuml;ft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p>
                <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
                <h5>Urheberrecht</h5>
                <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielf&auml;ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung au&szlig;erhalb der Grenzen des Urheberrechtes bed&uuml;rfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur f&uuml;r den privaten, nicht kommerziellen Gebrauch gestattet.</p>
                <p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

                <p>Quelle: <a href="https://www.e-recht24.de">eRecht24</a></p>

            </div>
        </div>

        <!-- container closing tag -->
    </div>

    <!-- overlay closing tag -->
</div>

<!-- header -->
<div class="navbar p-1">
    <div class="col-9 css_auth-image">
        <img src="images/auth_logo-transparent.png" class="img-fluid" alt="">
    </div>
    <a href="{{ route('home') }}" class="col-3 mb-1 css_auth-switch">Zurück</a>
</div>
@endsection