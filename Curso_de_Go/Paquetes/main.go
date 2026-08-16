package main

import (
	"fmt"
	"os"
)

func main() {
    envVar := os.Getenv("HOME")
    if envVar == "" {
        fmt.Println("La variable HOME no está configurada")
    } else {
        fmt.Println("HOME sí está configurada y es:", envVar)
    }
}