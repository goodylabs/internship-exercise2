package com.example.controller;

import com.example.model.FuelCalculator;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.Locale;

/**
 * Created by bartek on 09.02.15.
 * Controller for view: fuelCalculator.html
 */
@Controller
public class FuelCalculatorController {

    /**
     * Data model bean
     */
    @Autowired
    private FuelCalculator fuelCalculator;

    /**
     *
     * @param model - model for view. Add fuelCalculator (Autowired) to model key.
     * @return - fuel calculator view
     */
    @RequestMapping("/")
    public String fuelCalculator(Model model) {
        model.addAttribute("model", fuelCalculator);
        return "fuelCalculator";
    }

    /**
     *
     * @param calcModel -  fuel calculator data model
     * @param locale - current locale (US, EU, other)
     * @param model - model for view
     * @return - fuel calculator view
     */
    @RequestMapping("/calc")
    public String calc(FuelCalculator calcModel, Locale locale, Model model) {
        int fuel=calcModel.getFuel();
        int distance=calcModel.getDistance();
        double result=0.0;

        if(locale.toString().equals("en_US")) result=calcUS(fuel, distance);
        else if(locale.toString().equals("eu")) result=calcEU(fuel,distance);
        else result=calcEU(fuel,distance);

        calcModel.setResult(result);
        model.addAttribute("model", calcModel);

        return "fuelCalculator";
    }

    /**
     *
     * @param fuel - fuel amount
     * @param distance - distance amount
     * @return - l/100km
     */
    private double calcEU(int fuel, int distance){
        if(distance == 0) return 0.0;
        return ((double)fuel/distance)*100;
    }

    /**
     *
     * @param fuel - fuel amount
     * @param distance - distance amount
     * @return - miles per gallon
     */
    private double calcUS(int fuel, int distance){
        if(fuel == 0) return 0.0;
        return ((double)distance/fuel);
    }
}
