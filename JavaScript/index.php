<form action="">
    <select name="subject">
        <option value="maths">Maths</option>
        <option value="science">science</option>
        <option value="history">history</option>
    </select>
    <input type="submit" onclick="selectOption()" value="submit">
</form>

<script>
    function selectOption(){
        console.log("hello");
    }
</script>