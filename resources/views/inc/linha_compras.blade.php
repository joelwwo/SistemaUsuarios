
<tr class="text-center">
        @php
            if($compra->valor != 0)
            {
                    echo "<td>";
                    echo 'R$ ' . number_format($compra->valor, 2, ',', '.');
                    echo "</td>";
                    
                    echo "<td>";
                    echo $compra->created_at->format('d/m/Y');
                    echo "</td>";
            }
            
        @endphp
</tr>

<?php
