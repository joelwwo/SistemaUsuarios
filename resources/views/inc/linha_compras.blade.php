
<tr class="text-center">
    @php
        setlocale(LC_MONETARY, 'pt_BR');
    @endphp
    <td>{{-- {{$compra->valor}} --}}@php
        setlocale(LC_MONETARY, 'pt_BR');
        echo money_format('%i', $compra->valor);
    @endphp</td>
    <td> {{$compra->created_at->format('d/m/Y')}}</td>
</tr>

<?php

$number = 1234.56;

// let's print the international format for the en_US locale
/* setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n" */