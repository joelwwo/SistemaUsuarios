
<tr class="text-center">
    <td>
        @php
            echo 'R$ ' . number_format($compra->valor, 2, ',', '.');
        @endphp
    </td>
    <td> {{$compra->created_at->format('d/m/Y')}}</td>
</tr>

<?php
