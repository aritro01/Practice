#include <stdio.h>
#include <stdlib.h>

/*
 * 
 */
int main(int argc, char** argv) {

    int t, i;
    scanf("%d", &t);
    int a[t];
    for(i=0; i<t; i++) {
        scanf("%d", &a[i]);
    }
    for(i=0; i<t; i++) {
    printf("%d\n", fact(a[i]));
    }
}
int fact(int x) {
    int i, ans=1;
    for(i=1; i<=x; i++) {
        ans *= i;
    }
    return ans;
}
