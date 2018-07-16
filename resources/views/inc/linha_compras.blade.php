
<tr class="text-center">
    <td>
        @php
            echo 'R$ ' . number_format($compra->valor, 2, ',', '.');
        @endphp
    </td>
    <td> {{$compra->created_at->format('d/m/Y')}}</td>
</tr>

<?php

$number = 1234.56;

// let's print the international format for the en_US locale
/* setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n" */