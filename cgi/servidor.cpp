#include <iostream>
#include <cstdlib>

int main() {
    std::cout << "Content-Type: text/html;charset=UTF-8\n\n";
    const char* method = std::getenv("REQUEST_METHOD");
    std::cout << "<html><head><title>Título da página</title></head><body>Método: " << method << "</body></html>";

    return 0;
}
