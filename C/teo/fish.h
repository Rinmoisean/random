#ifndef __FISH_H
#define __FISH_H

typedef struct exercise {
    const char *description;
    float duraction;
} exercise;

typedef struct meal {
    const char *ingridients;
    float weight;
} meal;

typedef struct preferences {
    meal food;
    exercise exercise;
} preferences;
typedef struct fish {
    const char *name;
    const char *species;
    int teeth;
    int age;
    preferences care;
} fish;

void catalog(fish);
void label(fish);

#endif