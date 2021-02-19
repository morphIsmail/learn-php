<style>
    .container {
        width: 1000px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        font-size: 24px;
        flex-wrap: wrap;
    }
    table {
        width: 300px;
        text-align: center; 
        border-collapse: collapse;
    }
    caption {
        margin: 15px 0;
    }
    td {
        border: 1px solid #888;
    }
    .result {
        width: 1000px;
        font-size: 30px;
        font-weight: bold;
        margin: 20px auto 0;
    }
</style>
<div class="container">
    <table>
        <caption>Поразрядное пересечение - И (AND)</caption>
        <tr>
            <td>x1</td>
            <td>x2</td>
            <td>x1 & x2</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>0</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </table>
    <table>
        <caption>Поразрядное объединение - ИЛИ (OR)</caption>
        <tr>
            <td>x1</td>
            <td>x2</td>
            <td>x1 | x2</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </table>
    <table>
        <caption>Поразрядное исключающее ИЛИ (XOR)</caption>
        <tr>
            <td>x1</td>
            <td>x2</td>
            <td>x1 ^ x2</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>0</td>
        </tr>
    </table>
    <table>
        <caption>Поразрядное отрицание (NOT)</caption>
        <tr>
            <td>x</td>
            <td>~ x</td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
        </tr>
    </table>
</div>
