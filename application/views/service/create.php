<main>
    <h2>
        Service
    </h2>

    <p>
        Required information is marked with an asterick (*).
    </p>

    <form method="POST" class="client-form">
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
                <td>Business Name:</td>
                <td>
                    <input type="text" name="businessName" id="business_name"> 
                </td>
            </tr>
        </table>

        <input type="submit">
    </form>
</main>