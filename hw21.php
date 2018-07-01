<table>
    <tr>
        <th>0</th>
        <th>0</th>
        <td><?php echo (int)(false && false);  ?></td>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <td><?php echo (int)(false && true);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <td><?php echo (int)(true && false);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <td><?php echo (int)(true && true);  ?></td>
    </tr>
</table>
<br>
<table>
    <tr>
        <th>0</th>
        <th>0</th>
        <td><?php echo (int)(false || false);  ?></td>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <td><?php echo (int)(false || true);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <td><?php echo (int)(true || false);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <td><?php echo (int)(true || true);  ?></td>
    </tr>
</table>
<br>
<table>
    <tr>
        <th>0</th>
        <th>0</th>
        <td><?php echo (int)(false xor false);  ?></td>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <td><?php echo (int)(false xor true);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <td><?php echo (int)(true xor false);  ?></td>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <td><?php echo (int)(true xor true);  ?></td>
    </tr>
</table>