<?php

function format_devise($montant)
{
    return number_format($montant, 0, ',', ' ')." FCFA";
}