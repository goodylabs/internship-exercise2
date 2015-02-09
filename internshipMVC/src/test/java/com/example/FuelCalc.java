package com.example;

import com.example.controller.FuelCalculatorController;
import org.junit.Test;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;

import static org.junit.Assert.assertEquals;

/**
 * Created by bartek on 09.02.15.
 * Class with test method
 */
public class FuelCalc {
    /**
     * test calculate fuel in US method
     */
    @Test
    public void fuelCalcUS(){
        FuelCalculatorController fuelCalculatorController=new FuelCalculatorController();
        Method method = null;
        try {
            method = fuelCalculatorController.getClass().getDeclaredMethod("calcUS",int.class, int.class);
            method.setAccessible(true);
            assertEquals("Fuel is 0: ",0.0,method.invoke(fuelCalculatorController,0,10));
            assertEquals("Distance is 0: ",0.0,method.invoke(fuelCalculatorController,10,0));


        } catch (NoSuchMethodException e) {
            e.printStackTrace();
        } catch (InvocationTargetException e) {
            e.printStackTrace();
        } catch (IllegalAccessException e) {
            e.printStackTrace();
        }


    }

    /**
     * test calculate fuel in EU method
     */
    @Test
    public void fuelCalcEU(){
        FuelCalculatorController fuelCalculatorController=new FuelCalculatorController();
        Method method = null;
        try {
            method = fuelCalculatorController.getClass().getDeclaredMethod("calcEU",int.class, int.class);
            method.setAccessible(true);
            assertEquals("Fuel is 0: ", 0.0, method.invoke(fuelCalculatorController,0,10));
            assertEquals("Distance is 0: ",0.0,method.invoke(fuelCalculatorController,10,0));


        } catch (NoSuchMethodException e) {
            e.printStackTrace();
        } catch (InvocationTargetException e) {
            e.printStackTrace();
        } catch (IllegalAccessException e) {
            e.printStackTrace();
        }
    }


}
