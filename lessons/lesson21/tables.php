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
        <caption>Логическое И (AND)</caption>
        <tr>
            <td>x1</td>
            <td>x2</td>
            <td>x1 && x2</td>
        </tr>
        <tr>
            <td>false</td>
            <td>false</td>
            <td>false</td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
            <td>false</td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
            <td>false</td>
        </tr>
        <tr>
            <td>true</td>
            <td>true</td>
            <td>true</td>
        </tr>
    </table>
    <table>
        <caption>Логическое ИЛИ (OR)</caption>
        <tr>
            <td>x1</td>
            <td>x2</td>
            <td>x1 || x2</td>
        </tr>
        <tr>
            <td>false</td>
            <td>false</td>
            <td>false</td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
            <td>true</td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
            <td>true</td>
        </tr>
        <tr>
            <td>true</td>
            <td>true</td>
            <td>true</td>
        </tr>
    </table>
    <table>
        <caption>Логическое отрицание</caption>
        <tr>
            <td>x</td>
            <td>! x</td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
        </tr>
    </table>
</div>
