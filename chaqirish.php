<html>
    <head>
        <title>chaqirish</title>
    </head>
    <body>
        <form action="backend.php" method="POST">
            <div>
                <label for="">Ism
                <input type="text" name="ism">
                </label>
            </div>
            <div>
                <label for="">Familiya
                    <input type="text" name="familiya">
                </label>
            </div>
            <div>
                <label for=""> Sharif
                <input type="text" name="sharif">
                </label>
            </div>
            <div>
                <label for=""> Matn
                    <textarea name="matn" cols = "30" rows="10"></textarea>
                </label>
            </div>
            <div>
                Tekshirish:
                <input type="radio" name="gender"> Radio1
                <input type="radio" name="gender"> Radio2
                <input type="radio" name="gender"> Radio3
            </div>
            <div>
                <input type="checkbox" name="check">Universitet talabasimisiz?
            </div>
            <button type="submit">Yuborish</button>
        </form>
    </body>
</html>