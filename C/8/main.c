#include <stdio.h>
#include <encrypt.h>
#include <cheksum.h>

int main () {
    char s[] = "Скажи друг и проходи";
    encrypt (s);
    printf("Зашифровано в '%s'\n", s);
    printf("Контрольная сумма %i\n", cheksum(s));
    encrypt (s);
    printf("Расшифрованно обратно в: '%s'\n", s);
    printf("Контрольная сумма %i\n", cheksum(s));
    return 0;
}

