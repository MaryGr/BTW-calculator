<div ng-app="appleCalculator">
  <div class="calculator" ng-controller="Calculator">
    <input class="readout" type='readonly' disabled ng-model="console">
    <div class="keys">
     
        <button class="key misc" ng-click="clearTotal()">C</button>
        <button class="key misc" ng-click="changePositivity()"><sup>+</sup>/<sub>−</sub></button>
        <button class="key misc" ng-click="getPercentage()">%</button>
        <button class="key function" ng-click="divide()">÷</button>   
      
        <button class="key numeric" ng-click="print(7)">7</button>
        <button class="key numeric" ng-click="print(8)">8</button>
        <button class="key numeric" ng-click="print(9)">9</button>
        <button class="key function" ng-click="multiply()">×</button>
     
      
        <button class="key numeric" ng-click="print(4)">4</button>
        <button class="key numeric" ng-click="print(5)">5</button>
        <button class="key numeric" ng-click="print(6)">6</button>
        <button class="key function" ng-click="subtract()">−</button>
     
        <button class="key numeric" ng-click="print(1)">1</button>
        <button class="key numeric" ng-click="print(2)">2</button>
        <button class="key numeric" ng-click="print(3)">3</button>
        <button class="key function" ng-click="add()">+</button>
      
        <button class="key numeric double" ng-click="print(0)">0</button>
        <button class="key numeric" ng-click="print('.')">,</button>
        <button class="key function" ng-click="equal()">=</button>
      
    </div>
 
  </div>
</div>      

 
