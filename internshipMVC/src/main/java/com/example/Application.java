package com.example;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.EnableAutoConfiguration;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;

/**
 * Created by bartek on 09.02.15.
 * Start application from main
 */
@Configuration
@EnableAutoConfiguration
@ComponentScan
public class Application{
    /**
     * Start application method
     * @param args
     */
    public static void main(String[] args) {
        SpringApplication.run(Application.class, args);
    }
}
