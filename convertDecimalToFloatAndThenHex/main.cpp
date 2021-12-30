#include <iostream>
#include <map>
#include <string>
#include <cmath>

using namespace std;

string convertToHexDecimal(int number ,map<int ,string> numbersBiggerThatNine) {
    if (number <= 0) return "";
    int reminder = number % 16;
    number = number / 16;
    if (reminder <= 9) {
        return convertToHexDecimal(number, numbersBiggerThatNine) += to_string(reminder);
    } else {
        return convertToHexDecimal(number, numbersBiggerThatNine) += numbersBiggerThatNine[reminder];
    }
}

int convertToFloatPoint(float q,float decimalNumber){
    q = ceil(q);
    return ceil(decimalNumber * pow(2,q));
}
int main() {
    float decimal;
    float Q;
    cout << "Enter the decimal number : ";
    cin >> decimal;
    cout << "Enter the Q : ";
    cin >> Q;
    map<int,string> numbersBiggerThatNine = {
        {10  , "A"},
        {11  , "B"},
        {12  , "C"},
        {13  , "D"},
        {14  , "E"},
        {15  , "F"},
    };
    int convertNumber = convertToFloatPoint(Q,decimal);
    cout << convertToHexDecimal(convertNumber ,numbersBiggerThatNine) << std::endl;
    return 0;
}
