function InputUserName(name)
{
    console.log("Username : " + name);

    var checkFirstRegex = /^[0-9~`!@#$%^&()_={}[\]:;,.<>+\/?-]$/;
    if(name.length < 8 || name.length > 12 )
    {
        return "Username tidak valid (8 - 12 Character)";
    }
    else
    {
        for(var a = 0; a < name.length; a++)
        {
            if (checkFirstRegex.test(name[0]) == true) 
            {
                return "Username tidak valid (tidak bolek diawali angka dan spesial karakter)";
            }
        }
    }

    if(name != "")
    {
        var CheckUpperCase = /[A-Z]/;
        var CheckLowerCase = /[a-z]/;

        if(CheckUpperCase.test(name))
        {
            return "Username Tidak Valid (Tidak boleh Mengandung Huruf Besar)";
        }
        else if(!CheckLowerCase.test(name))
        {
            return "Username Tidak Valid (Harus Mengandung Huruf Kecil)";
        }
    }


    return 'Username valid';
}

function InputPassword(password)
{
    console.log("Password : " + password);

    if(password.length < 9)
    {
        return "Password Tidak Valid (Minimal 7 Karakter)";
    }

    if(password != "")
    {
        var CheckNumber = /[0-9]/;
        var CheckUpperCase = /[A-Z]/;
        var CheckSpesial = /[~`!@#$%^&()_={}[\]:;,.<>+\/?-]/;

        if(!CheckNumber.test(password))
        {
            return "Password Tidak Valid (Harus Mengandung Angka)";
        }
        else if(CheckUpperCase.test(password))
        {
            return "Password Tidak Valid (Harus Mengandung Huruf Besar)";
        }
        else if (!CheckSpesial.test(password))
        {
            return "Password Tidak Valid (Harus Mengandung Spesial Karakter '@')";
        }
    }

    return "Password Valid";
}

console.log(InputUserName("john.smith"));
console.log(InputUserName("johnsmith26"));
console.log(InputUserName("JOHNSmith"));
console.log(InputPassword("j0hn5m!th"));