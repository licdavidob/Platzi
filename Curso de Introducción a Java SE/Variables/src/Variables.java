public class Variables {
    public static void main(String[] args) {
        // Declare a variable e inicializarla
        int myNumber = 10;
        System.out.println(myNumber);

        // Modificar el valor de la variable
        myNumber = 20;
        System.out.println(myNumber);

        // Concatenar Strings
        String myName = "David";
        myName = myName + " Olvera";
        myName += " Baeza";
        System.out.println("Mi nombre es: " + myName);

        // Llamar a un método
        typeVariables();
    }

    public static void typeVariables() {
        // Enteros
        byte myByte = 10;
        short myShort = 100;
        int myInt = 10;
        long myLong = 12345678901L;

        // Decimales
        double myDouble = 123.456;
        float myFloat = 123.456F;

        // Caracteres y Booleanos
        char myChar = 'A';
        boolean myBoolean = true;
        String myString = "Hello World";

        // Constantes
        final double PI = 3.1416;

        // Inferiendo el tipo de dato
        // Esto es una característica de Java 10 en adelante
//        var myVar = 10;

        System.out.println("Valor Byte: " + myByte);
        System.out.println("Valor Short: " + myShort);
        System.out.println("Valor Int: " + myInt);
        System.out.println("Valor Long: " + myLong);
        System.out.println("Valor Double: " + myDouble);
        System.out.println("Valor Float: " + myFloat);
        System.out.println("Valor Char: " + myChar);
        System.out.println("Valor Boolean: " + myBoolean);
        System.out.println("Valor String: " + myString);
        System.out.println("Valor Constante PI: " + PI);
//        System.out.println("Dato inferido: " + myVar);
    }

    public static void incremento_decremento() {
        int myNumber = 10;
        System.out.println("Valor original: " + myNumber);

        // Incrementar en 1
        myNumber++;
        System.out.println("Incremento en 1: " + myNumber);

        // Incrementar en 2
        myNumber += 2;
        System.out.println("Incremento en 2: " + myNumber);

        // Decrementar en 1
        myNumber--;
        System.out.println("Decremento en 1: " + myNumber);

        // Decrementar en 2
        myNumber -= 2;
        System.out.println("Decremento en 2: " + myNumber);

        // Incremento prefijo
        // Explicacion: primero se incrementa y luego se imprime
        System.out.println("Incremento prefijo: " + ++myNumber);

        // Incremento sufijo
        // Explicacion: primero se imprime y luego se incrementa
        System.out.println("Incremento sufijo: " + myNumber++);
    }
}
