#include <stdio.h>

int main() //int = egész szám
{
    int tomb[8];
    int i;// érték adás
    for(i=0;i<8;i++){
        scanf("%d", &tomb[i]);// tömb feltöltése elemekkel
    }
    for(i=0;i<8;i++){
        printf("%d ", tomb[i]);// érték kiirása konzolra
    }
    printf("\n");//enter vagyis sortörés
    
    int csere = tomb[0];//egész számot létrehoz és egyenlővé teszi a tömb első elemével.
    tomb[0] = tomb[1];
    tomb[1] = csere;            //megcseréli a tömb 1. és 0. elemét
    for(i=0;i<8;i++){
        printf("%d ", tomb[i]);
    }
    printf("\n");
    i = 0;
    int min_idx=0;
    for(i=0;i<8;i++){
        if(tomb[min_idx] > tomb[i])
            min_idx = i;
    }
    
    printf("%d %d\n", min_idx, tomb[min_idx]);
    return 0;
}