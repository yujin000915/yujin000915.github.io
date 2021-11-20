<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
</style>

<script>
    // 과제1
    // 배열을 파라미터로 받는 function run을 구현하라
    // 입력받은 배열내에는 정수값이 임의의 갯수만큼 정의되어 있으며,
    // 해당 배열의 모든 정수원소의 총합을 리턴한다.
    // function run(arr){
    // return;
    // }
    // 입출력예시 : 
    // 입력 [1,2,-3,4,-5]
    // 연산 1+2+(-3)+4+(-5)
    // 출력 -1

    function run(arr) {
        var arr = [1, 2, -3, 4, -5];
        var result = arr.reduce((acc, cur, i) => {
            return acc + cur;	
        }, 0);
        
        return;
    }

    // 과제2
    // 두개의 배열을 파라미터로 받는 function run을 구현하라
    // arr1에는 임의의 갯수만큼 정수가, arr2에는 arr1와 같은 갯수만큼 boolean 값들이 정의 되어 있다.
    // arr1내 모든 정수원소의 총합을 구하되, 동일한 순서에 있는 arr2의 값이 true라면 양수(+)를, false 라면 음수(-)를 적용하여 합산하여 
    // 총합을 리턴한다.
    // function run(arr1,arr2){
    // return;
    // }
    // 입출력예시 : 
    // 입력 arr1 : [1,2,-3,4,-5] arr2 : [true,false,false,true,true]
    // 연산 1 + (-2) + 3 + 4 + (-5)
    // 출력 1

    function run2(arr1, arr2) {
        var arr1 = [1, 2, -3, 4, -5];
        var arr2 = [true, false, false, true, true];
        
        var result = arr1.reduce((acc, cur, i) => {
            console.log(acc, cur, i);

            return acc + cur;
        }, 0);

        console.log(result);


        return;
    }
    console.log(run2());



    // 과제3
    // 두개의 배열을 파라미터로 받는 function run을 구현하라
    // arr1과 arr2에는 동일하게 임의의 갯수만큼 정수가 정의 되어 있다.
    // arr1의 값과 arr2의 내적합을 구하는 기능을 구현하라
    // function run(arr1,arr2){
    // return;
    // }
    // 입출력예시 : 
    // 입력 arr1 : [1,2,3,4,5] arr2 : [6,7,-8,9,-10]
    // 연산 (1*6) + (2*7) + (3*-8) + (4*9) + (5*-10)
    // 출력 -18

    function run3() {
        var arr1 = [1, 2, 3, 4, 5];
        var arr2 = [6, 7, -8, 9, -10];

        var result = arr1.reduce((acc, cur, i) => {
            // console.log(acc, cur, i);
            return acc + cur;
        }, 0); 

        // console.log(result);

        return;
    }
    console.log(run3());

</script>

<body>
    
</body>
</html>