import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;
import java.util.Base64;

import javax.crypto.Cipher;
import javax.crypto.SecretKey;
import javax.crypto.spec.SecretKeySpec;
import javax.xml.bind.DatatypeConverter;

public class Encript {
    public static void main(String[] args) {
        String textDesencriptado = Desencriptar("Mfer5Xyr7Jw=");
        System.out.println("Texto desencriptado: " + textDesencriptado);
        Encriptar(textDesencriptado);
    }

    public static void Encriptar(String password) {
        MessageDigest md = null;

        try {
            md = MessageDigest.getInstance("SHA-256");
            byte[] digest = md.digest(password.getBytes(StandardCharsets.UTF_8));
            String sha256 = DatatypeConverter.printHexBinary(digest).toLowerCase();
            System.out.println("Resultado SHA256: " + sha256);
        } catch (NoSuchAlgorithmException e) {
            e.printStackTrace();
        }
    }

    public static String Desencriptar(String textoEncriptado) {

        String secretKey = "multas";
        String base64EncryptedString = "";

        try {
            byte[] message = Base64.getDecoder().decode(textoEncriptado.getBytes("utf-8"));
            MessageDigest md = MessageDigest.getInstance("MD5");
            byte[] digestOfPassword = md.digest(secretKey.getBytes("utf-8"));
            byte[] keyBytes = Arrays.copyOf(digestOfPassword, 24);
            SecretKey key = new SecretKeySpec(keyBytes, "DESede");

            Cipher decipher = Cipher.getInstance("DESede");
            decipher.init(Cipher.DECRYPT_MODE, key);

            byte[] plainText = decipher.doFinal(message);

            base64EncryptedString = new String(plainText, "UTF-8");

        } catch (Exception ex) {
        }
        return base64EncryptedString;
    }
}
