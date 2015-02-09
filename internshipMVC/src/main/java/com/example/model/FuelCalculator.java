package com.example.model;

/**
 * Created by bartek on 09.02.15.
 * Data model for fuel calculator
 */
public class FuelCalculator {

    /**
     * distance amount
     */
    private int distance;
    /**
     * fuel amount
     */
    private int fuel;
    /**
     * result after calculate
     */
    private double result;

    public double getResult() {
        return result;
    }

    public void setResult(double result) {
        this.result = result;
    }

    public int getDistance() {
        return distance;
    }

    public void setDistance(int distance) {
        this.distance = distance;
    }

    public int getFuel() {
        return fuel;
    }

    public void setFuel(int fuel) {
        this.fuel = fuel;
    }
}
