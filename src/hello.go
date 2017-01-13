package main

import (
	"fmt"
	"time"
	"os"
)

func main() {
	fmt.Println(time.Now())
	hello := "hello woxxrld"
	fmt.Println(hello, "\nxxx")
	userFile := "test.txt"
	file, err := os.OpenFile(userFile, os.O_APPEND, 0) // For read access.
	if err != nil {
		os.Create(userFile)
	}
	for {
		file.WriteString(time.Now().String() + "\n")
		file.WriteString("abc" + "\n")
		println(userFile)
		line()
	}
	file.Close()
}

func line() {
	fmt.Println("=====================")
	time.Sleep(1 * time.Second)
}
