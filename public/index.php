<style>
    @font-face {
        font-family: "Serif Trial Black Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Black Italic.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Black";
        src: url("assets/fonts/TT Norms Pro Serif Trial Black.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Bold Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Bold Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Bold";
        src: url("assets/fonts/TT Norms Pro Serif Trial Bold.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial DemiBold Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial DemiBold Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial DemiBold";
        src: url("assets/fonts/TT Norms Pro Serif Trial DemiBold.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial ExtraBlack Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial ExtraBlack Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial ExtraBlack";
        src: url("assets/fonts/TT Norms Pro Serif Trial ExtraBlack.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial ExtraBold Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial ExtraBold Italic.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial ExtraBold";
        src: url("assets/fonts/TT Norms Pro Serif Trial ExtraBold.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif";
        src: url("assets/fonts/TT Norms Pro Serif Trial ExtraLight") format("truetype");
    }

    @font-face {
        font-family: "assets/fonts/Serif Trial ExtraLight";
        src: url("home/assets/fonts/TT Norms Pro Serif Trial ExtraLight.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Light Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Light Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Light";
        src: url("assets/fonts/TT Norms Pro Serif Trial Light.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Medium Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Medium Italic.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Medium";
        src: url("assets/fonts/TT Norms Pro Serif Trial Medium.ttf") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Normal Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Normal Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Normal";
        src: url("assets/fonts/TT Norms Pro Serif Trial Normal.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Regular";
        src: url("assets/fonts/TT Norms Pro Serif Trial Regular.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Thin Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Thin Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Thin";
        src: url("assets/fonts/TT Norms Pro Serif Trial Thin.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Var Italic";
        src: url("assets/fonts/TT Norms Pro Serif Trial Var Italic.ttf ") format("truetype");
    }

    @font-face {
        font-family: "Serif Trial Var Roman";
        src: url("assets/fonts/TT Norms Pro Serif Trial Var Roman.ttf") format("truetype");
    }
</style>

<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . './../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__ . './../bootstrap/app.php')
    ->handleRequest(Request::capture());
