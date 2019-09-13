<main>
    <h2>
        Contact Us
    </h2>

    <p>
        Required information is marked with an asterick (*).
    </p>

    <form method="post">
        <table border="0">
            <tr>
                <td width="14%">* First Name:</td>
                <td width="70%">
                    <input type="text" name="firstName" id="first_name" required>
                </td>
            </tr>

            <tr>
                <td>* Last Name:</td>
                <td>
                    <input type="text" name="lastName" id="last_name" required>
                </td>
            </tr>

            <tr>
                <td>* E-mail:</td>
                <td>
                    <input type="email" name="email" id="email" required>
                </td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td>
                    <input type="tel" name="phone" id="phone" maxlength="10" pattern='[2-9]{2}\d{8}' title='Please enter valid mobile number'>
                </td>
            </tr>

            <tr>
                <td>* Comments:</td>
                <td>
                    <textarea name="comments" id="comments" cols="22" rows="3" required></textarea>
                </td>
            </tr>
        </table>

        <input type="submit">
    </form>
</main>